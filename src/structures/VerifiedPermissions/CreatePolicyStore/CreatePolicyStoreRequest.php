<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\ValidationSettings $validationSettings
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $deletionProtection
 * @property array<string, string>|null $tags
 */
class CreatePolicyStoreRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     validationSettings: Shapes\ValidationSettings,
     *     description?: string|null,
     *     deletionProtection?: 'ENABLED'|'DISABLED'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
