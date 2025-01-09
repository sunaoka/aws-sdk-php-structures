<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $domainName
 * @property bool $enableAutoSubDomain
 * @property list<Shapes\SubDomainSetting> $subDomainSettings
 * @property list<string> $autoSubDomainCreationPatterns
 * @property string $autoSubDomainIAMRole
 * @property Shapes\CertificateSettings $certificateSettings
 */
class CreateDomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     domainName: string,
     *     enableAutoSubDomain?: bool,
     *     subDomainSettings: list<Shapes\SubDomainSetting>,
     *     autoSubDomainCreationPatterns?: list<string>,
     *     autoSubDomainIAMRole?: string,
     *     certificateSettings?: Shapes\CertificateSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
