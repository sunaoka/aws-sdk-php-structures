<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateQuestionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\YesNoQuestion>|null $yesNo
 * @property list<Shapes\YesNoPerOptionQuestion>|null $yesNoPerOption
 * @property list<Shapes\ChooseOneQuestion>|null $chooseOne
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateQuestionSetRequest extends Request
{
    /**
     * @param array{
     *     yesNo?: list<Shapes\YesNoQuestion>|null,
     *     yesNoPerOption?: list<Shapes\YesNoPerOptionQuestion>|null,
     *     chooseOne?: list<Shapes\ChooseOneQuestion>|null,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
