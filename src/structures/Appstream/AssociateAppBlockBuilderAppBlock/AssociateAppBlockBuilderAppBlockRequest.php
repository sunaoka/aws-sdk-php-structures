<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateAppBlockBuilderAppBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppBlockArn
 * @property string $AppBlockBuilderName
 */
class AssociateAppBlockBuilderAppBlockRequest extends Request
{
    /**
     * @param array{
     *     AppBlockArn: string,
     *     AppBlockBuilderName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
