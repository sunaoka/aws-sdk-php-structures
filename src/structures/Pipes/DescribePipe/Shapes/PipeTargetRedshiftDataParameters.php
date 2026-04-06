<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Database
 * @property string|null $DbUser
 * @property string|null $SecretManagerArn
 * @property list<string> $Sqls
 * @property string|null $StatementName
 * @property bool|null $WithEvent
 */
class PipeTargetRedshiftDataParameters extends Shape
{
    /**
     * @param array{
     *     Database: string,
     *     DbUser?: string|null,
     *     SecretManagerArn?: string|null,
     *     Sqls: list<string>,
     *     StatementName?: string|null,
     *     WithEvent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
