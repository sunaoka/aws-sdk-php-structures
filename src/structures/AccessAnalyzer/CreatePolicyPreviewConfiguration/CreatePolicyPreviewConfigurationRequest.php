<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreatePolicyPreviewConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'GLOBAL'|null $scope
 */
class CreatePolicyPreviewConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     scope?: 'GLOBAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
