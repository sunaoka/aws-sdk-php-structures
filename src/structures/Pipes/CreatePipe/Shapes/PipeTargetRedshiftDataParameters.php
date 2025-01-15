<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretManagerArn
 * @property string $Database
 * @property string|null $DbUser
 * @property string|null $StatementName
 * @property bool|null $WithEvent
 * @property list<string> $Sqls
 */
class PipeTargetRedshiftDataParameters extends Shape
{
    /**
     * @param array{
     *     SecretManagerArn?: string|null,
     *     Database: string,
     *     DbUser?: string|null,
     *     StatementName?: string|null,
     *     WithEvent?: bool|null,
     *     Sqls: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
