<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateConfigurationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property string $Name
 * @property string $Description
 * @property string $RetrievalRoleArn
 * @property list<Shapes\Validator> $Validators
 * @property string $KmsKeyIdentifier
 */
class UpdateConfigurationProfileRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationProfileId: string,
     *     Name?: string,
     *     Description?: string,
     *     RetrievalRoleArn?: string,
     *     Validators?: list<Shapes\Validator>,
     *     KmsKeyIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
