<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterCACertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caCertificate
 * @property string $verificationCertificate
 * @property bool $setAsActive
 * @property bool $allowAutoRegistration
 * @property Shapes\RegistrationConfig $registrationConfig
 * @property list<Shapes\Tag> $tags
 * @property 'DEFAULT'|'SNI_ONLY' $certificateMode
 */
class RegisterCACertificateRequest extends Request
{
    /**
     * @param array{
     *     caCertificate: string,
     *     verificationCertificate?: string,
     *     setAsActive?: bool,
     *     allowAutoRegistration?: bool,
     *     registrationConfig?: Shapes\RegistrationConfig,
     *     tags?: list<Shapes\Tag>,
     *     certificateMode?: 'DEFAULT'|'SNI_ONLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
