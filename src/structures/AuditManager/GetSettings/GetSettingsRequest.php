<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL'|'IS_AWS_ORG_ENABLED'|'SNS_TOPIC'|'DEFAULT_ASSESSMENT_REPORTS_DESTINATION'|'DEFAULT_PROCESS_OWNERS'|'EVIDENCE_FINDER_ENABLEMENT'|'DEREGISTRATION_POLICY'|'DEFAULT_EXPORT_DESTINATION' $attribute
 */
class GetSettingsRequest extends Request
{
    /**
     * @param array{attribute: 'ALL'|'IS_AWS_ORG_ENABLED'|'SNS_TOPIC'|'DEFAULT_ASSESSMENT_REPORTS_DESTINATION'|'DEFAULT_PROCESS_OWNERS'|'EVIDENCE_FINDER_ENABLEMENT'|'DEREGISTRATION_POLICY'|'DEFAULT_EXPORT_DESTINATION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
