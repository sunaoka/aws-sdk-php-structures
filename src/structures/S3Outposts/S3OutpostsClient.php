<?php

namespace Sunaoka\Aws\Structures\S3Outposts;

class S3OutpostsClient extends \Aws\S3Outposts\S3OutpostsClient
{
    use CreateEndpoint\CreateEndpointTrait;
    use DeleteEndpoint\DeleteEndpointTrait;
    use ListEndpoints\ListEndpointsTrait;
    use ListOutpostsWithS3\ListOutpostsWithS3Trait;
    use ListSharedEndpoints\ListSharedEndpointsTrait;
}
