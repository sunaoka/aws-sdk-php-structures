<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgreementId
 * @property string $ServerId
 */
class DescribeAgreementRequest extends Request
{
    /**
     * @param array{
     *     AgreementId: string,
     *     ServerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
