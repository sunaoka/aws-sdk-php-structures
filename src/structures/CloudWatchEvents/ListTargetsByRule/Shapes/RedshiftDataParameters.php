<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretManagerArn
 * @property string $Database
 * @property string|null $DbUser
 * @property string $Sql
 * @property string|null $StatementName
 * @property bool|null $WithEvent
 */
class RedshiftDataParameters extends Shape
{
    /**
     * @param array{
     *     SecretManagerArn?: string|null,
     *     Database: string,
     *     DbUser?: string|null,
     *     Sql: string,
     *     StatementName?: string|null,
     *     WithEvent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
