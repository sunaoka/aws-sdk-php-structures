<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCACertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property 'ACTIVE'|'INACTIVE'|null $newStatus
 * @property 'ENABLE'|'DISABLE'|null $newAutoRegistrationStatus
 * @property Shapes\RegistrationConfig|null $registrationConfig
 * @property bool|null $removeAutoRegistration
 */
class UpdateCACertificateRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     newStatus?: 'ACTIVE'|'INACTIVE'|null,
     *     newAutoRegistrationStatus?: 'ENABLE'|'DISABLE'|null,
     *     registrationConfig?: Shapes\RegistrationConfig|null,
     *     removeAutoRegistration?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
