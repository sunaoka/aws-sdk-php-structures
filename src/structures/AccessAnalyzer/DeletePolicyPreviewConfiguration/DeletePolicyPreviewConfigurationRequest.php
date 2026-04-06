<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\DeletePolicyPreviewConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 */
class DeletePolicyPreviewConfigurationRequest extends Request
{
    /**
     * @param array{clientToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
