<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetRepositoryScanningConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RepositoryScanningConfiguration>|null $scanningConfigurations
 * @property list<Shapes\RepositoryScanningConfigurationFailure>|null $failures
 */
class BatchGetRepositoryScanningConfigurationResponse extends Response
{
}
