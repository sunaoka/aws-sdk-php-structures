<?php

namespace Sunaoka\Aws\Structures\Chime\BatchUpdateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial' $LicenseType
 * @property 'PrivateUser'|'SharedDevice' $UserType
 * @property AlexaForBusinessMetadata $AlexaForBusinessMetadata
 */
class UpdateUserRequestItem extends Shape
{
    /**
     * @param array{
     *     UserId: string,
     *     LicenseType?: 'Basic'|'Plus'|'Pro'|'ProTrial',
     *     UserType?: 'PrivateUser'|'SharedDevice',
     *     AlexaForBusinessMetadata?: AlexaForBusinessMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
