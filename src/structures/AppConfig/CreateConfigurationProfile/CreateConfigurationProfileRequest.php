<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateConfigurationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $Name
 * @property string|null $Description
 * @property string $LocationUri
 * @property string|null $RetrievalRoleArn
 * @property list<Shapes\Validator>|null $Validators
 * @property array<string, string>|null $Tags
 * @property string|null $Type
 * @property string|null $KmsKeyIdentifier
 */
class CreateConfigurationProfileRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Name: string,
     *     Description?: string|null,
     *     LocationUri: string,
     *     RetrievalRoleArn?: string|null,
     *     Validators?: list<Shapes\Validator>|null,
     *     Tags?: array<string, string>|null,
     *     Type?: string|null,
     *     KmsKeyIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
