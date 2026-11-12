<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetMergeCasesStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED' $status
 * @property string|null $primaryCaseId
 * @property list<string>|null $secondaryCaseIds
 */
class GetMergeCasesStatusResponse extends Response
{
}
