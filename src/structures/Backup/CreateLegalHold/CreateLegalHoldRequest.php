<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Title
 * @property string $Description
 * @property string $IdempotencyToken
 * @property Shapes\RecoveryPointSelection $RecoveryPointSelection
 * @property array<string, string> $Tags
 */
class CreateLegalHoldRequest extends Request
{
    /**
     * @param array{
     *     Title: string,
     *     Description: string,
     *     IdempotencyToken?: string,
     *     RecoveryPointSelection?: Shapes\RecoveryPointSelection,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
