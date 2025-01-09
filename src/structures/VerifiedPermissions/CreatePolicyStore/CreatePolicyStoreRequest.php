<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\ValidationSettings $validationSettings
 * @property string $description
 */
class CreatePolicyStoreRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     validationSettings: Shapes\ValidationSettings,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
