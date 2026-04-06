<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainName
 * @property string|null $DisplayName
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property 'PENDING_VALIDATION'|'ASSOCIATING'|'ACTIVE'|'INACTIVE'|'DISASSOCIATING'|'DISASSOCIATED'|'FAILED_TO_ASSOCIATE'|'FAILED_TO_DISASSOCIATE'|null $DomainStatus
 * @property string|null $AcmCertificateArn
 */
class DescribeDomainResponse extends Response
{
}
