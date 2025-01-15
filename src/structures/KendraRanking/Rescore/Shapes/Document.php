<?php

namespace Sunaoka\Aws\Structures\KendraRanking\Rescore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $GroupId
 * @property string|null $Title
 * @property string|null $Body
 * @property list<string>|null $TokenizedTitle
 * @property list<string>|null $TokenizedBody
 * @property float $OriginalScore
 */
class Document extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     GroupId?: string|null,
     *     Title?: string|null,
     *     Body?: string|null,
     *     TokenizedTitle?: list<string>|null,
     *     TokenizedBody?: list<string>|null,
     *     OriginalScore: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
