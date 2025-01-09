<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteIngressPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IngressPointId
 */
class DeleteIngressPointRequest extends Request
{
    /**
     * @param array{IngressPointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
