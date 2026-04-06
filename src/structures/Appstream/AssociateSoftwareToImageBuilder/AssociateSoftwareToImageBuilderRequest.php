<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateSoftwareToImageBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageBuilderName
 * @property list<string> $SoftwareNames
 */
class AssociateSoftwareToImageBuilderRequest extends Request
{
    /**
     * @param array{
     *     ImageBuilderName: string,
     *     SoftwareNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
