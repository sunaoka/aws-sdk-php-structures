<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterCACertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caCertificate
 * @property string|null $verificationCertificate
 * @property bool|null $setAsActive
 * @property bool|null $allowAutoRegistration
 * @property Shapes\RegistrationConfig|null $registrationConfig
 * @property list<Shapes\Tag>|null $tags
 * @property 'DEFAULT'|'SNI_ONLY'|null $certificateMode
 */
class RegisterCACertificateRequest extends Request
{
    /**
     * @param array{
     *     caCertificate: string,
     *     verificationCertificate?: string|null,
     *     setAsActive?: bool|null,
     *     allowAutoRegistration?: bool|null,
     *     registrationConfig?: Shapes\RegistrationConfig|null,
     *     tags?: list<Shapes\Tag>|null,
     *     certificateMode?: 'DEFAULT'|'SNI_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
