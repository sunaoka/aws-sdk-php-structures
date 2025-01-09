<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityDkimSigningAttributes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED' $DkimStatus
 * @property list<string> $DkimTokens
 */
class PutEmailIdentityDkimSigningAttributesResponse extends Response
{
}
