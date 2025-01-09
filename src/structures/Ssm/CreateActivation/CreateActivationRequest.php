<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateActivation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $DefaultInstanceName
 * @property string $IamRole
 * @property int $RegistrationLimit
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property list<Shapes\Tag> $Tags
 * @property list<Shapes\RegistrationMetadataItem> $RegistrationMetadata
 */
class CreateActivationRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     DefaultInstanceName?: string,
     *     IamRole: string,
     *     RegistrationLimit?: int,
     *     ExpirationDate?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Shapes\Tag>,
     *     RegistrationMetadata?: list<Shapes\RegistrationMetadataItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
