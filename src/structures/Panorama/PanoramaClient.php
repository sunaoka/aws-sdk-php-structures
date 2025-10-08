<?php

namespace Sunaoka\Aws\Structures\Panorama;

class PanoramaClient extends \Aws\Panorama\PanoramaClient
{
    use CreateApplicationInstance\CreateApplicationInstanceTrait;
    use CreateJobForDevices\CreateJobForDevicesTrait;
    use CreateNodeFromTemplateJob\CreateNodeFromTemplateJobTrait;
    use CreatePackage\CreatePackageTrait;
    use CreatePackageImportJob\CreatePackageImportJobTrait;
    use DeleteDevice\DeleteDeviceTrait;
    use DeletePackage\DeletePackageTrait;
    use DeregisterPackageVersion\DeregisterPackageVersionTrait;
    use DescribeApplicationInstance\DescribeApplicationInstanceTrait;
    use DescribeApplicationInstanceDetails\DescribeApplicationInstanceDetailsTrait;
    use DescribeDevice\DescribeDeviceTrait;
    use DescribeDeviceJob\DescribeDeviceJobTrait;
    use DescribeNode\DescribeNodeTrait;
    use DescribeNodeFromTemplateJob\DescribeNodeFromTemplateJobTrait;
    use DescribePackage\DescribePackageTrait;
    use DescribePackageImportJob\DescribePackageImportJobTrait;
    use DescribePackageVersion\DescribePackageVersionTrait;
    use ListApplicationInstanceDependencies\ListApplicationInstanceDependenciesTrait;
    use ListApplicationInstanceNodeInstances\ListApplicationInstanceNodeInstancesTrait;
    use ListApplicationInstances\ListApplicationInstancesTrait;
    use ListDevices\ListDevicesTrait;
    use ListDevicesJobs\ListDevicesJobsTrait;
    use ListNodeFromTemplateJobs\ListNodeFromTemplateJobsTrait;
    use ListNodes\ListNodesTrait;
    use ListPackageImportJobs\ListPackageImportJobsTrait;
    use ListPackages\ListPackagesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ProvisionDevice\ProvisionDeviceTrait;
    use RegisterPackageVersion\RegisterPackageVersionTrait;
    use RemoveApplicationInstance\RemoveApplicationInstanceTrait;
    use SignalApplicationInstanceNodeInstances\SignalApplicationInstanceNodeInstancesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDeviceMetadata\UpdateDeviceMetadataTrait;
}
