<?php

namespace Sunaoka\Aws\Structures\MediaPackage;

class MediaPackageClient extends \Aws\MediaPackage\MediaPackageClient
{
    use ConfigureLogs\ConfigureLogsTrait;
    use CreateChannel\CreateChannelTrait;
    use CreateHarvestJob\CreateHarvestJobTrait;
    use CreateOriginEndpoint\CreateOriginEndpointTrait;
    use DeleteChannel\DeleteChannelTrait;
    use DeleteOriginEndpoint\DeleteOriginEndpointTrait;
    use DescribeChannel\DescribeChannelTrait;
    use DescribeHarvestJob\DescribeHarvestJobTrait;
    use DescribeOriginEndpoint\DescribeOriginEndpointTrait;
    use ListChannels\ListChannelsTrait;
    use ListHarvestJobs\ListHarvestJobsTrait;
    use ListOriginEndpoints\ListOriginEndpointsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RotateChannelCredentials\RotateChannelCredentialsTrait;
    use RotateIngestEndpointCredentials\RotateIngestEndpointCredentialsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdateOriginEndpoint\UpdateOriginEndpointTrait;
}
