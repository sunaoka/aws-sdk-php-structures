<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityDkimSigningAttributes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'|null $DkimStatus
 * @property list<string>|null $DkimTokens
 * @property string|null $SigningHostedZone
 */
class PutEmailIdentityDkimSigningAttributesResponse extends Response
{
}
