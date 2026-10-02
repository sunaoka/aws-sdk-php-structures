<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Phase
 * @property string $Description
 * @property string $Service
 * @property string $Action
 * @property string|null $Logic
 * @property string|null $Inverse
 * @property string|null $VerifyAfter
 */
class RemediationStep extends Shape
{
    /**
     * @param array{
     *     Phase: string,
     *     Description: string,
     *     Service: string,
     *     Action: string,
     *     Logic?: string|null,
     *     Inverse?: string|null,
     *     VerifyAfter?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
