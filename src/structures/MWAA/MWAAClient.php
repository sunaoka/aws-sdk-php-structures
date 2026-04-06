<?php

namespace Sunaoka\Aws\Structures\MWAA;

class MWAAClient extends \Aws\MWAA\MWAAClient
{
    use CreateCliToken\CreateCliTokenTrait;
    use CreateEnvironment\CreateEnvironmentTrait;
    use CreateWebLoginToken\CreateWebLoginTokenTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use InvokeRestApi\InvokeRestApiTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PublishMetrics\PublishMetricsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEnvironment\UpdateEnvironmentTrait;
}
