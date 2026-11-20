<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\StartAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $ClientToken
 * @property string $FrameworkId
 * @property string $EntityId
 * @property list<Shapes\ControlInput>|null $Controls
 * @property array<string, string>|null $Tags
 */
class StartAssessmentRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken?: string|null,
     *     FrameworkId: string,
     *     EntityId: string,
     *     Controls?: list<Shapes\ControlInput>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
