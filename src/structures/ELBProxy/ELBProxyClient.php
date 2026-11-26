<?php

namespace Sunaoka\Aws\Structures\ELBProxy;

class ELBProxyClient extends \Aws\ELBProxy\ELBProxyClient
{
    use AssociateCertificate\AssociateCertificateTrait;
    use CreateProxy\CreateProxyTrait;
    use DeleteProxy\DeleteProxyTrait;
    use DisassociateCertificate\DisassociateCertificateTrait;
    use GetProxy\GetProxyTrait;
    use GetProxyAttributes\GetProxyAttributesTrait;
    use GetProxyConfigurationContents\GetProxyConfigurationContentsTrait;
    use GetProxyUpdate\GetProxyUpdateTrait;
    use ListCertificateAssociations\ListCertificateAssociationsTrait;
    use ListProxies\ListProxiesTrait;
    use ListProxyUpdates\ListProxyUpdatesTrait;
    use ListProxyVersions\ListProxyVersionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateProxyAttributes\UpdateProxyAttributesTrait;
    use UpdateProxyConfiguration\UpdateProxyConfigurationTrait;
    use UpdateProxyNetworkConfiguration\UpdateProxyNetworkConfigurationTrait;
}
