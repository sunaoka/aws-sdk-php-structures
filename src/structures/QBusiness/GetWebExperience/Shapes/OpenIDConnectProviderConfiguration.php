<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretsArn
 * @property string $secretsRole
 */
class OpenIDConnectProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     secretsArn: string,
     *     secretsRole: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
