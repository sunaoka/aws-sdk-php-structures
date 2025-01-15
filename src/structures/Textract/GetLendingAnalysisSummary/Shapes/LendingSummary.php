<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DocumentGroup>|null $DocumentGroups
 * @property list<string>|null $UndetectedDocumentTypes
 */
class LendingSummary extends Shape
{
    /**
     * @param array{
     *     DocumentGroups?: list<DocumentGroup>|null,
     *     UndetectedDocumentTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
