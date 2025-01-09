<?php

namespace Sunaoka\Aws\Structures\Inspector\RemoveAttributesFromFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $findingArns
 * @property list<string> $attributeKeys
 */
class RemoveAttributesFromFindingsRequest extends Request
{
    /**
     * @param array{
     *     findingArns: list<string>,
     *     attributeKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
