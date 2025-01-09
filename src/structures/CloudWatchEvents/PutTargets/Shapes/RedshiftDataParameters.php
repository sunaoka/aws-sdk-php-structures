<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretManagerArn
 * @property string $Database
 * @property string $DbUser
 * @property string $Sql
 * @property string $StatementName
 * @property bool $WithEvent
 */
class RedshiftDataParameters extends Shape
{
    /**
     * @param array{
     *     SecretManagerArn?: string,
     *     Database: string,
     *     DbUser?: string,
     *     Sql: string,
     *     StatementName?: string,
     *     WithEvent?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
