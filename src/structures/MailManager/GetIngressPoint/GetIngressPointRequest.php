<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IngressPointId
 */
class GetIngressPointRequest extends Request
{
    /**
     * @param array{IngressPointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
