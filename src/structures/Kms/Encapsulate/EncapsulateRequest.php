<?php

namespace Sunaoka\Aws\Structures\Kms\Encapsulate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property 'ML_KEM' $EncapsulationAlgorithm
 * @property list<string>|null $GrantTokens
 * @property bool|null $DryRun
 */
class EncapsulateRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     EncapsulationAlgorithm: 'ML_KEM',
     *     GrantTokens?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
