<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCACertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property 'ACTIVE'|'INACTIVE' $newStatus
 * @property 'ENABLE'|'DISABLE' $newAutoRegistrationStatus
 * @property Shapes\RegistrationConfig $registrationConfig
 * @property bool $removeAutoRegistration
 */
class UpdateCACertificateRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     newStatus?: 'ACTIVE'|'INACTIVE',
     *     newAutoRegistrationStatus?: 'ENABLE'|'DISABLE',
     *     registrationConfig?: Shapes\RegistrationConfig,
     *     removeAutoRegistration?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
