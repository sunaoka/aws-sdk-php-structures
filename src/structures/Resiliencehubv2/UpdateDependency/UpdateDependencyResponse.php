<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateDependency;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $dependencyId
 * @property string $dependencyName
 * @property string $location
 * @property 'HARD'|'SOFT'|'UNKNOWN' $criticality
 * @property string|null $comment
 * @property string|null $provider
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateDependencyResponse extends Response
{
}
