<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretManagerArn
 * @property string $Database
 * @property string|null $DbUser
 * @property string|null $Sql
 * @property string|null $StatementName
 * @property bool|null $WithEvent
 * @property list<string>|null $Sqls
 */
class RedshiftDataParameters extends Shape
{
    /**
     * @param array{
     *     SecretManagerArn?: string|null,
     *     Database: string,
     *     DbUser?: string|null,
     *     Sql?: string|null,
     *     StatementName?: string|null,
     *     WithEvent?: bool|null,
     *     Sqls?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
