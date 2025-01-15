<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateActivation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string|null $DefaultInstanceName
 * @property string $IamRole
 * @property int<1, 1000>|null $RegistrationLimit
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\RegistrationMetadataItem>|null $RegistrationMetadata
 */
class CreateActivationRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DefaultInstanceName?: string|null,
     *     IamRole: string,
     *     RegistrationLimit?: int<1, 1000>|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     RegistrationMetadata?: list<Shapes\RegistrationMetadataItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
