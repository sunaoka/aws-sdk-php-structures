<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $domainName
 * @property bool|null $enableAutoSubDomain
 * @property list<Shapes\SubDomainSetting> $subDomainSettings
 * @property list<string>|null $autoSubDomainCreationPatterns
 * @property string|null $autoSubDomainIAMRole
 * @property Shapes\CertificateSettings|null $certificateSettings
 */
class CreateDomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     domainName: string,
     *     enableAutoSubDomain?: bool|null,
     *     subDomainSettings: list<Shapes\SubDomainSetting>,
     *     autoSubDomainCreationPatterns?: list<string>|null,
     *     autoSubDomainIAMRole?: string|null,
     *     certificateSettings?: Shapes\CertificateSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
