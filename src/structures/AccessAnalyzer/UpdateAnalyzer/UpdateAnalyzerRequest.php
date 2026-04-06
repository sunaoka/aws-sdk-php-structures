<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\UpdateAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property Shapes\AnalyzerConfiguration|null $configuration
 */
class UpdateAnalyzerRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     configuration?: Shapes\AnalyzerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
