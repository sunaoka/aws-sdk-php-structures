<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EligibleDataSource>|null $eligibleDataSources
 */
class ContentRetrievalRule extends Shape
{
    /**
     * @param array{eligibleDataSources?: list<EligibleDataSource>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
