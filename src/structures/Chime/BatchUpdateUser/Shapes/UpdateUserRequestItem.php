<?php

namespace Sunaoka\Aws\Structures\Chime\BatchUpdateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial'|null $LicenseType
 * @property 'PrivateUser'|'SharedDevice'|null $UserType
 * @property AlexaForBusinessMetadata|null $AlexaForBusinessMetadata
 */
class UpdateUserRequestItem extends Shape
{
    /**
     * @param array{
     *     UserId: string,
     *     LicenseType?: 'Basic'|'Plus'|'Pro'|'ProTrial'|null,
     *     UserType?: 'PrivateUser'|'SharedDevice'|null,
     *     AlexaForBusinessMetadata?: AlexaForBusinessMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
