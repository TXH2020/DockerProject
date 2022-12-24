# DockerProject

Youtube link:
https://youtu.be/sZp9X48Ktxs

For complete details regarding project, see the OSProject Report.pdf file in the repo.

Note: 
1. The free app service plan on Azure has a limitation.
If the app is left idle for a very long time in hours, not only does it get idled out but the app as well as it's persistent storage is removed from memory.
To solve this problem, it is better to use an azure basic b1 service plan which is free for the first 30 days. There, just change the settings to Always on to prevent idling.
2. We can also use an azure mysql database instead of the local database to solve the above problem.But this requires changes in the source code
3. Using Azure File Share for persistency of data has also proved problematic.
<br>
The best approach is to have the source code in a github repository, build an image in Azure Container Registry using that source code, deploy a webapp based on that image and enable Continuous Integration to automatically reload the web app whenever the source code changes.
