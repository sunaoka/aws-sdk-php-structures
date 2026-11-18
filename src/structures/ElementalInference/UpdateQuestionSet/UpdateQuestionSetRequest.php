<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateQuestionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<Shapes\YesNoQuestion>|null $yesNo
 * @property list<Shapes\YesNoPerOptionQuestion>|null $yesNoPerOption
 * @property list<Shapes\ChooseOneQuestion>|null $chooseOne
 * @property string|null $name
 */
class UpdateQuestionSetRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     yesNo?: list<Shapes\YesNoQuestion>|null,
     *     yesNoPerOption?: list<Shapes\YesNoPerOptionQuestion>|null,
     *     chooseOne?: list<Shapes\ChooseOneQuestion>|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
