<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\PutServiceQuotaIncreaseRequestIntoTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QuotaCode
 * @property string $ServiceCode
 * @property string $AwsRegion
 * @property double $DesiredValue
 */
class PutServiceQuotaIncreaseRequestIntoTemplateRequest extends Request
{
    /**
     * @param array{
     *     QuotaCode: string,
     *     ServiceCode: string,
     *     AwsRegion: string,
     *     DesiredValue: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
