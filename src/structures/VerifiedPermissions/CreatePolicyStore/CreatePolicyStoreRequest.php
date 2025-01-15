<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\ValidationSettings $validationSettings
 * @property string|null $description
 */
class CreatePolicyStoreRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     validationSettings: Shapes\ValidationSettings,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
