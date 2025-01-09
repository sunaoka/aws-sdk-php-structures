<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretManagerArn
 * @property string $Database
 * @property string $DbUser
 * @property string $StatementName
 * @property bool $WithEvent
 * @property list<string> $Sqls
 */
class PipeTargetRedshiftDataParameters extends Shape
{
    /**
     * @param array{
     *     SecretManagerArn?: string,
     *     Database: string,
     *     DbUser?: string,
     *     StatementName?: string,
     *     WithEvent?: bool,
     *     Sqls: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
