<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableS3AccessGrants
 * @property bool $CreateUserLevelPrefix
 * @property 'DIRECTORY_IDENTITY' $AuthenticationType
 */
class QueryResultsS3AccessGrantsConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableS3AccessGrants: bool,
     *     CreateUserLevelPrefix?: bool,
     *     AuthenticationType: 'DIRECTORY_IDENTITY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
