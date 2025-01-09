<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateConfigurationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $Name
 * @property string $Description
 * @property string $LocationUri
 * @property string $RetrievalRoleArn
 * @property list<Shapes\Validator> $Validators
 * @property array<string, string> $Tags
 * @property string $Type
 * @property string $KmsKeyIdentifier
 */
class CreateConfigurationProfileRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Name: string,
     *     Description?: string,
     *     LocationUri: string,
     *     RetrievalRoleArn?: string,
     *     Validators?: list<Shapes\Validator>,
     *     Tags?: array<string, string>,
     *     Type?: string,
     *     KmsKeyIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
