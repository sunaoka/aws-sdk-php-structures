<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateConfigurationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $RetrievalRoleArn
 * @property list<Shapes\Validator>|null $Validators
 * @property string|null $KmsKeyIdentifier
 */
class UpdateConfigurationProfileRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationProfileId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     RetrievalRoleArn?: string|null,
     *     Validators?: list<Shapes\Validator>|null,
     *     KmsKeyIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
