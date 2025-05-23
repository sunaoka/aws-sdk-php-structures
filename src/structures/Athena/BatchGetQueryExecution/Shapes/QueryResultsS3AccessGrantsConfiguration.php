<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableS3AccessGrants
 * @property bool|null $CreateUserLevelPrefix
 * @property 'DIRECTORY_IDENTITY' $AuthenticationType
 */
class QueryResultsS3AccessGrantsConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableS3AccessGrants: bool,
     *     CreateUserLevelPrefix?: bool|null,
     *     AuthenticationType: 'DIRECTORY_IDENTITY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
