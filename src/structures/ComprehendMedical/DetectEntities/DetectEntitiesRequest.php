<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 */
class DetectEntitiesRequest extends Request
{
    /**
     * @param array{Text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
