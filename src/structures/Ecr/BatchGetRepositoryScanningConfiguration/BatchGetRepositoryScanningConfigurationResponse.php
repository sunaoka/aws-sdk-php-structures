<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetRepositoryScanningConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RepositoryScanningConfiguration> $scanningConfigurations
 * @property list<Shapes\RepositoryScanningConfigurationFailure> $failures
 */
class BatchGetRepositoryScanningConfigurationResponse extends Response
{
}
