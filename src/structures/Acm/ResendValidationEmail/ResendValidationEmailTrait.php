<?php

namespace Sunaoka\Aws\Structures\Acm\ResendValidationEmail;

trait ResendValidationEmailTrait
{
    /**
     * @param ResendValidationEmailRequest $args
     * @return void
     */
    public function resendValidationEmail(ResendValidationEmailRequest $args)
    {
        parent::resendValidationEmail($args->toArray());
    }
}
