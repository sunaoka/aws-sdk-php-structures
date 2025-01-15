<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Title
 * @property string $Description
 * @property string|null $IdempotencyToken
 * @property Shapes\RecoveryPointSelection|null $RecoveryPointSelection
 * @property array<string, string>|null $Tags
 */
class CreateLegalHoldRequest extends Request
{
    /**
     * @param array{
     *     Title: string,
     *     Description: string,
     *     IdempotencyToken?: string|null,
     *     RecoveryPointSelection?: Shapes\RecoveryPointSelection|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
